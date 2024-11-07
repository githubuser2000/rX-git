#!/bin/zsh
hier="/home/alex/Downloads/2023-11-30-jounk33-forum-files-Ordner/files/www/forum"
cd $hier"/"files

file -i {.*,*} | awk -F'[:;]' '{print $2" : "$1}' | sort | sed 's/[\/\+]/_/g' | awk -F':' -v hier="$hier" '{sub(/^\s*/, "", $1);sub(/^\s*/, "", $2);sub(/\s$/, "", $1);sub(/\s$/, "", $2);system("cd "hier";mkdir -p "hier"/compressed/"$1"/files;cp \""hier"/files/"$2"\" "hier"/compressed/"$1"/files;cd "hier"/compressed/"$1"/;tar -c files > ../"$1".tar")}'

cd $hier"/compressed"
xz -k --threads=16 --lzma2=dict=512MiB *.tar
cd $hier
