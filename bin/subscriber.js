var mqtt = require('mqtt')
var client  = mqtt.connect('mqtt://192.168.1.51')
client.on('connect', function () {
    client.subscribe('lock')
})
client.on('message', function (topic, message) {
context = message.toString();
console.log(context)
})