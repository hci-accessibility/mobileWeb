angular.
  module('preferences').
  component('preferenceList',
    {
      templateUrl: 'app-preferences/preference-list.template.html',
      controller: function PreferencesController(){
        this.preferences = [
          {
            name: "wheelchair",
            description: "wheelchair bound cant climb stairs"
          }, {
            name: "wheelchair",
            description: "wheelchair bound cant climb stairs"
          },{
            name: "wheelchair",
            description: "wheelchair bound cant climb stairs"
          }
        ];
      }
    });
