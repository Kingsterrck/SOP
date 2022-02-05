function transter(value) {
    var date = value.substring(0,10);
    var hour = value.substring(11,13);
    var minute = value.substring(16);
    var output = date + " " + hour + ":" + minute + ":00";
    return output;
}