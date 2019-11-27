#!/usr/bin/env bash

set -e

if [ $# -lt 1 ]; then
	echo "usage: $0 <version>"
	exit 1
fi

version=$1

sed -i '' -e "s/^ \* Version: .*/ * Version: ${version}/g" block-demo-with-markup.php;
sed -i '' -e "s/^ \* @version .*/ * @version ${version}/g" block-demo-with-markup.php;

rsync -a --exclude-from=.distignore ./ ./distribution/
cd distribution
zip -r ../block-demo-with-markup.zip ./
cd ../
