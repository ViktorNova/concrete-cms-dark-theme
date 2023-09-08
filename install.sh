#!/bin/bash

REPODIR=`pwd`
cd ../public
ln -s $REPODIR/basic_bedrock_build
cd packages
ln -s $REPODIR/packages/theme_basic_bedrock
