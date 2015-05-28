// Push projects to array for mapping
var ObjectToArray = function(obj = {you:'fuck',now:'off'}) {

    var toReturn = [];
    for (var i in obj) {
        toReturn.push([i, obj[i]]);
        //console.log('THIS IS OTA in command find the keys>> >> >> ', obj);
    };
    return toReturn;
};

// Finds entire object based on value  and replaces the "name" variable
// Fix this to change any variable you choose
function findAndReplace(object, value, replacevalue){
    for(var x in object){
        if(typeof object[x] == typeof {}){
            findAndReplace(object[x], value, replacevalue);
        }
        if(object[x] == value){
            object["name"] = replacevalue;
            // break; // uncomment to stop after first replacement
        }
    }
}
//
//findAndReplace(myObject, "test1", "test dfasjkhHH45");

export default ObjectToArray;