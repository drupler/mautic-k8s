#!/bin/sh

PROJECT_ROOT=/var/www/symfony
CONSOLE_PATH=/var/www/symfony/mautic/app/console

cd ${PROJECT_ROOT}
composer migrate
composer installplugins
${CONSOLE_PATH} cache:clear --env=prod
# @TODO - re-enable, failing in production
# rm -rf /cache/{pro_,prod,run}
until ${CONSOLE_PATH} cache:warmup ; do sleep 5; done; echo "OKAY"

