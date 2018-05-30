#!/bin/bash
case $1 in
  "zip")
    cd new
    zip -r ../new *
    cd ../old 
    zip -r ../old *
  ;;
  "clean")
    rm *.zip
  ;;
esac