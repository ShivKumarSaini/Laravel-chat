'use strict';

var path = require('path');
var _ = require('lodash');

function requiredProcessEnv(name) {
  if (!process.env[name]) {
    throw new Error('You must set the ' + name + ' environment variable');
  }
  return process.env[name];
}

// All configurations will extend these options
// ============================================
var all = {
  env: process.env.NODE_ENV,

  // Root path of server
  root: path.normalize(__dirname + '/../../..'),

  // Server port
  port: process.env.PORT || 9000,

  // Server IP
  ip: process.env.IP || '0.0.0.0',

  // Should we populate the DB with sample data?
  seedDB: false,

  // Secret for session, you will want to change this and make it an environment variable
  secrets: {
    session: 'fullstack-secret'
  },
  pushNotifications: {
    gcm: {
      id: '', // PUT YOUR GCM SERVER API KEY,
      msgcnt: 1,
      dataDefaults: {
        delayWhileIdle: false,
        timeToLive: 4 * 7 * 24 * 3600, // 4 weeks
        retries: 4
      },
      // Custom GCM request options https://github.com/ToothlessGear/node-gcm#custom-gcm-request-options
      options: {}
    },
    apn: {
      gateway: 'gateway.sanbox.push.apple.com',
      badge: 1,
      defaultData: {
        expiry: 4 * 7 * 24 * 3600, // 4 weeks
        sound: 'ping.aiff',
      },
      // See all available options at https://github.com/argon/node-apn/blob/master/doc/connection.markdown
      options: {
        production: false
      },
      // I.e., change .cert location file:
      // options: {
      //    cert: "/certs/ios/mycert.cert" // {Buffer|String} The filename of the connection certificate to load from disk, or a Buffer/String containing the certificate data. (Defaults to: cert.pem)
      // }
    },
    adm: {
      client_id: null, // PUT YOUR ADM CLIENT ID,
      client_secret: null, // PUT YOUR ADM CLIENT SECRET,
      expiresAfter: 4 * 7 * 24 * 3600, // 4 weeks
      // Custom ADM request options, same as https://github.com/ToothlessGear/node-gcm#custom-gcm-request-options
      options: {},
    }
  },
  USE_SSL: true,//true,
  ssl: {
    key: '/etc/letsencrypt/live/mydailysauce.com/privkey.pem',
    cert: '/etc/letsencrypt/live/mydailysauce.com/fullchain.pem'
  },
  // MongoDB connection options
  mongo: {
    options: {
      db: {
        safe: true
      }
    }
  },

  facebook: {
    clientID:     process.env.FACEBOOK_ID || 'id',
    clientSecret: process.env.FACEBOOK_SECRET || 'secret',
    callbackURL:  (process.env.DOMAIN || '') + '/auth/facebook/callback'
  },

  twitter: {
    clientID:     process.env.TWITTER_ID || 'id',
    clientSecret: process.env.TWITTER_SECRET || 'secret',
    callbackURL:  (process.env.DOMAIN || '') + '/auth/twitter/callback'
  },

  google: {
    clientID:     process.env.GOOGLE_ID || 'id',
    clientSecret: process.env.GOOGLE_SECRET || 'secret',
    callbackURL:  (process.env.DOMAIN || '') + '/auth/google/callback'
  },

  cachePrefix: 'XCAMS_'
};

// Export the config object based on the NODE_ENV
// ==============================================
module.exports = _.merge(
  all,
  require('./shared'),
  require('./' + process.env.NODE_ENV + '.js') || {});
