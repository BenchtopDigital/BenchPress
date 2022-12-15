#!/usr/bin/env bash

SERVICE_ID=$(docker-compose ps -q wordpress)
docker restart $SERVICE_ID