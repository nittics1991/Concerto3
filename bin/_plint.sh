#!/bin/bash

for x in $(find $(cd $(dirname "$0"); pwd)/../src -name "*.php") ; do php -l "$x"; done
