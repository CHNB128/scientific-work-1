#!/bin/bash
case $1 in
  "zip")
    zip new new/*
    zip old old/*
  ;;
  "clean")
    rm *.zip
  ;;
esac