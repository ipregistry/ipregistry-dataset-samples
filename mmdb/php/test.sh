#!/bin/bash

docker run --rm -v $(pwd):/app -w /app php:cli php lookup.php
