'use strict';

// Development specific configuration
// ==================================
module.exports = {
  db: {
    username: process.env.DB_DBUSERNAME || 'clay',
    password: process.env.DB_PASSWORD ||'dailysauce2020',
    database: process.env.DB_NAME ||'xcams-v2',
    host: '127.0.0.1',
    dialect: 'mysql'
  },
  redis: {
    port: 6379,
    host: '127.0.0.1',
    db: 3, // if provided select a non-default redis db
    options: {
      // see https://github.com/mranney/node_redis#rediscreateclient
    }
  },
  port: 3000,
};
