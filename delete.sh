#!/bin/zsh
#i=0
cd compressed
for a in `ls *.tar* | sort | xargs -i ls -l {} | awk '{print $5" "$NF}' | awk -F '.' '{print $1}' | awk '{print $2}' | uniq`;do;
    #i=`math ${i}'+1'`
    for b in `ls -Sr ${a}.*`;do;
        #ls -l $b
        cp -ax $b /home/alex/Downloads/2023-11-30-jounk33-forum-files-Ordner/files/www/forum/2023-11-30-jounk33-forum-files-Ordner.XzBrBzip
        break
    done;
    continue
    for b in `ls -Sr ${a}.*`;do;
        ls -l $b
    done;
    #if [ `math $i'%8'` -ne 2 ] && [ `math $i'%2'` -eq 0 ]
    if [ `math $i'%8'` -eq 2 ]
    then
        #cp -ax $a 2023-11-30-jounk33-forum-files-Ordner
        #echo cp -ax $a 2023-11-30-jounk33-forum-files-Ordner
        echo kl
        #cp -ax $a /home/alex/Downloads/2023-11-30-jounk33-forum-files-Ordner/files/www/forum/2023-11-30-jounk33-forum-files-Ordner.XzBrBzip
        ls -l $a
    else
        if [ `math $i'%2'` -eq 0 ]
        then
            ls -l $a
        fi
    fi
done
#echo $i
cd -
