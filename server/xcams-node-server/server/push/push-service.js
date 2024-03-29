var PushNotifications = new require('node-pushnotifications');
var config = require('./../config/environment');
var pushService = new PushNotifications(config.pushNotifications);
var path = require('path');
// config.pushNotifications.apn.options.cert = path.resolve( 'server/certs/cerfiticate_production.pem');
// config.pushNotifications.apn.options.key = path.resolve('server/certs/key_production.pem');
config.pushNotifications.apn.cert = null;
config.pushNotifications.apn.key = null;
config.pushNotifications.apn.pfx = path.resolve( 'server/certs/xcam.p12');
// config.pushNotifications.apn.passphrase = '123456';
config.pushNotifications.apn.contentAvailable = true;
module.exports = pushService;
module.exports.deviceType = ['ios', 'android'];