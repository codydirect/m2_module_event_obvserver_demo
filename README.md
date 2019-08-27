## Setup

1. Clone repo with `src/app/code` (ex. `src/app/code/Learning/HelloPage`)
1. Update `$slackWebHookURL` on line 12 in `HelloPage/Observer/FireSlackWebhook.php`
1. Run `bin/magento setup:upgrade`
1. Visiting https://magento2.test:8443/test/page/view will fire the event and trigger the observer