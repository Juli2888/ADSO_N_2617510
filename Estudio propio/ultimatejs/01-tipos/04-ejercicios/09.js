let pairs = [
    [1, {name:"Nicolas"}],
    [2, {name:"Felipe"}],
    [3, {name:"Chanchito"}],
];

function toCollection(arr) {
    let collection = [];
    for (let idx in arr) {
        let elemento = arr[idx];
        let obj = {};
        obj.id = elemento[0];
        obj.name = elemento[1].name;
        collection.push(obj);
    }
    return collection;
}

console.log(toCollection(pairs));
