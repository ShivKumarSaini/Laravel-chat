'use strict';

// Production specific configuration
// =================================
module.exports = {
  // Server IP
  ip:     process.env.OPENSHIFT_NODEJS_IP ||
          process.env.IP ||
          undefined,

  // Server port
  port:   process.env.OPENSHIFT_NODEJS_PORT ||
          process.env.PORT ||
          8080,

  db: {
    username: process.env.DB_DBUSERNAME || 'root',
    password: process.env.DB_PASSWORD ||'',
    database: process.env.DB_NAME ||'xcams',
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
  }
};