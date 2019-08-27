<?php

namespace Learning\HelloPage\Observer;

use Magento\Framework\Event\ObserverInterface;

class FireSlackWebhook implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // Update Slack webhook URL
        $slackWebHookUrl ='';

        define('SLACK_WEBHOOK', $slackWebHookUrl);
        // Make your message
        $message = ['payload' => json_encode(['text' => time()])];
        // Use curl to send your message
        $c = curl_init(SLACK_WEBHOOK);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $message);
        curl_exec($c);
        curl_close($c);

        $displayText = $observer->getData('mp_text');
    }
}