# BenchPress

## An OOP framework for building modern Wordpress themes and plugins

---
<br/><br/>

## Required Dependencies

1. Docker + Docker Compose
2. Composer (PHP)
3. Node
4. NPM or Yarn
<br/><br/>
---
<br/>

## Local Development

### Clone or Fork the repo
- `git clone https://github.com/BenchtopDigital/BenchPress.git`
- `cd BenchPress`

### Install Dependencies
- `composer update`
- `cd ./theme && npm i && cd..`

### Create .env
- `cp .env.example .env`
- ##### Edit .env to change any varibales as you prefer

### Run with Docker Compose
- `docker compse up -d`