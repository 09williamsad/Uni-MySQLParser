// 0 is start clause
// 1 are the expected clauses/text between start and end.
// 2 are the possible end clauses
// 3 is special conditions, i.e. endEmpty indicates that an end clause is optional
// 4 are the acceptable special characters between the clauses
let clausesStartEnd = [
    ["select", ["databaseObjectName"], ["from"], [""], [","]],
    ["from", ["databaseObjectName"], ["inner", "outer", "left", "right", "join", "where", "group", "order", ";", ")"], ["endEmpty", "singleObject"], []],
    ["order", [], ["by"], [""], []],
    ["group", [], ["by"], [""], []],
    ["by", ["databaseObjectName"], ["group", "order", ")"], ["endEmpty"], [","]],
    ["where", ["databaseObjectName", "and", "or"], ["group", "order", ")"], ["endEmpty"], []],
    ["insert", [], ["into"], [""], [","]],
    ["into", ["databaseObjectName", "(", ")"], ["values", "value"], [""], [","]],
    ["values", ["databaseObjectName", "("], [")"], [""], [","]],
    ["value", ["databaseObjectName", "("], [")"], [""], [""]],
    ["update", ["databaseObjectName"], ["set"], ["singleObject"], []],
    ["set", ["databaseObjectName"], [";"], ["assignmentList", "endEmpty"], [","]],
];