<?php

namespace consoleLogger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    private function formatMessage($message, $logLevel, $context)
    {
        $logLevelPrefix = [
            'emergency' => 0,
            'alert'     => 1,
            'critical'  => 2,
            'error'     => 3,
            'warning'   => 4,
            'notice'    => 5,
            'info'      => 6,
            'debug'     => 7,
        ];
        $message          = str_replace("'", "\'", $message);
        $formattedMessage = '[' . date('Y-m-d H:i:s') . ']';
        $formattedMessage = $formattedMessage . ' ' . strtoupper($logLevel) . ': ';
        $formattedMessage = $formattedMessage . 'Message: ' . $message;
        if (!empty($context)) {
            $formattedMessage = $formattedMessage . ', Context: ' . json_encode($context);
        }
        return $formattedMessage;
    }

    public function log($logLevel, $message, array $context = [])
    {
        $consoleFunctionMap = [
            'emergency' => 'error',
            'alert'     => 'warn',
            'critical'  => 'error',
            'error'     => 'error',
            'warning'   => 'warn',
            'notice'    => 'log',
            'info'      => 'info',
            'debug'     => 'debug',
        ];
        $message = $this->formatMessage($message, $logLevel, $context);
        echo "<script>";
        echo sprintf("console.%s('%s');", $consoleFunctionMap[$logLevel], $message);
        echo "</script>";
    }

    public function clearLog()
    {
        echo "<script>";
        echo "console.clear();";
        echo "</script>";
    }

    public function group($groupLabel)
    {
        $groupLabel = str_replace("'", "\'", $groupLabel);
        echo "<script>";
        echo sprintf("console.group('%s');", $groupLabel);
        echo "</script>";
    }

    public function groupEnd()
    {
        echo "<script>";
        echo "console.groupEnd();";
        echo "</script>";
    }
}
