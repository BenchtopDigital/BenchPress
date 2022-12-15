#!/usr/bin/env bash

SERVICE_ID=$(docker-compose ps -q wordpress)
docker exec -it $SERVICE_ID bash