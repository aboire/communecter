// This file helps any devlopper to update his environment in order to make it work
// according to the new development
// Add a datetime or better a commit id linked to the modification

//XXX - 01/01/01 - commitId fb11716e5a92340ef4f47c58c241716a3575a623
bla bla

//TKA - 24/2/15
db.organizations.update({type:"entreprise"},{"$set":{type:"LocalBusiness"}},{"multi":1})
db.organizations.update({type:"association"},{"$set":{type:"NGO"}},{"multi":1})
db.organizations.update({type:"group"},{"$set":{type:"Group"}},{"multi":1})

DB lists update documents
{
    "name" : "organisationTypes",
    "list" : {
        "NGO" : "Association",
        "LocalBusiness" : "Entreprise",
        "Group" : "Group"
    }
}


