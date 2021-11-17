#!/bin/sh

#
# Shiftleft scan
#


# docker run --name shiftleftscanlatest_650bc3 --label e28490 --workdir /github/workspace --rm  -v "/Users/nsyilmaz/SourceTree/tmp":"/github/workspace" shiftleft/scan:latest  "scan" "--src" "/github/workspace" "--out_dir" "reports" "--type" "php"


# docker run --name shiftleftscanlatest_650bc3 --label e28490 --workdir /github/workspace --rm  -v "/Users/nsyilmaz/SourceTree/tmp":"/github/workspace" shiftleft/sast-scan:latest  "scan" "--src" "/github/workspace" "--out_dir" "reports" "--type" "php"


# docker run --name shiftleftscanlatest_650bc3 --label e28490 --workdir /github/workspace --rm  -v "/Users/nsyilmaz/SourceTree/tmp":"/github/workspace" shiftleft/scan-slim:latest  "scan" "--src" "/github/workspace" "--out_dir" "reports" "--type" "php"

# docker run --name shiftleftscanlatest_650bc3 --label e28490 --workdir /github/workspace --rm  -v "/Users/nsyilmaz/SourceTree/tmp":"/github/workspace" shiftleft/scan-base:latest  "scan" "--src" "/github/workspace" "--out_dir" "reports" "--type" "php"
