<?php
declare(strict_types=1);

namespace Patory\Util;

enum Headers: string
{
    case Authorization = 'Authorization';
    case XPlatform = 'X-Platform';
    case XSelfId = 'X-Self-ID';
}

class Header
{
    private array $headers;

    public function __construct(string $platform, string $self_id, ?array $headers = [])
    {
        $this->headers = [
            'Content-Type' => 'application/json',
            Headers::Authorization->value => 'Bearer ',
            Headers::XPlatform->value => $platform,
            Headers::XSelfId->value => $self_id,
            'X-Framework-By' => 'Patory/1.0.0'
        ];
        $this->headers[] = $headers;
    }

    public function construction(): array
    {
        return $this->headers;
    }

    public function setter(): void
    {
        foreach ($this->headers as $key => $val)
        {
            header($key.': '.$val);
        }
    }

    public static function parseLinks(array $linkHeaders): array
    {
        $result = [];
        foreach ($linkHeaders as $linkHeader) {
            $result[] = static::parseLinkItem($linkHeader);
        }

        return $result;
    }

    protected static function parseLinkItem(string $value): array
    {
        preg_match('/<(.*)>[; ]?[; ]?(.*)?/i', $value, $matches);

        $url = $matches[1];
        $parsedParams = ['link' => $url];

        $params = $matches[2];
        if ($params) {
            $explodedParams = explode(';', $params);
            foreach ($explodedParams as $param) {
                $explodedParam = explode('=', $param);
                $trimmedKey = trim($explodedParam[0]);
                $trimmedValue = trim($explodedParam[1], '"');
                if ($trimmedKey === 'title*') {
                    // See https://www.rfc-editor.org/rfc/rfc8187#section-3.2.3
                    preg_match('/(.*)\'(.*)\'(.*)/i', $trimmedValue, $matches);
                    $trimmedValue = [
                        'language' => $matches[2],
                        'encoding' => $matches[1],
                        'value' => urldecode($matches[3]),
                    ];
                }
                $parsedParams[$trimmedKey] = $trimmedValue;
            }
        }

        return $parsedParams;
    }

    public static function parseAccept(string $header): array
    {
        $accept = [];
        if (!$header) {
            return $accept;
        }

        $headers = explode(',', $header);
        foreach (array_filter($headers) as $value) {
            $prefValue = '1.0';
            $value = trim($value);

            $semiPos = strpos($value, ';');
            if ($semiPos !== false) {
                $params = explode(';', $value);
                $value = trim($params[0]);
                foreach ($params as $param) {
                    $qPos = strpos($param, 'q=');
                    if ($qPos !== false) {
                        $prefValue = substr($param, $qPos + 2);
                    }
                }
            }

            if (!isset($accept[$prefValue])) {
                $accept[$prefValue] = [];
            }
            if ($prefValue) {
                $accept[$prefValue][] = $value;
            }
        }
        krsort($accept);

        return $accept;
    }
}
