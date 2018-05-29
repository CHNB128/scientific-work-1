#!/bin/bash
case $1 in
  "zip")
    zip -r new new/*
    zip -r old old/*
  ;;
  "clean")
    rm *.zip
  ;;
esac