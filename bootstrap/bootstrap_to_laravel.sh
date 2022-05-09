#!/bin/bash

cd $1

export_folder_rest=../../laravelapp/public/assets/
export_folder_php=../../laravelapp/resources/views/

function explore_and_export {
	local param=$1
	echo "search in : $param*"
	for filename in $param*; do
		if [[ "$filename" != "assets" && "$filename" != "templates" ]]; then
			echo $filename
			if [ -f $filename ]; then
				to_file="$export_folder_php$(echo "$filename" | cut -f 1 -d '.').blade.php"
				echo "to_file=$to_file"
				cp $filename $to_file
			else
				mkdir $export_folder_php$filename
				explore_and_export "$filename/";
			fi
		else
			echo "skip file or folder : $filename"
		fi
	done
}

cd ./export

rm $export_folder_php/../welcome.blade.dontremove
mv $export_folder_php/welcome.blade.php $export_folder_php/../welcome.blade.dontremove
rm -rf $export_folder_php/*
mv $export_folder_php/../welcome.blade.dontremove $export_folder_php/welcome.blade.php

explore_and_export ""

rm -rf $export_folder_rest/*

cp -r ./assets/* $export_folder_rest


