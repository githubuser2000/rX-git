#!/bin/sh
cp ~/reta.tar.xz cp ~/myRepos
cp ~/religionen.html cp ~/myRepos
cp ~/religionen.html.xz cp ~/myRepos
cd ~/myRepos
unxz -k reta.tar.xz
brotli -q 11 --large_window=29 reta.tar
brotli -q 11 --large_window=29 religionen.html
cd -
