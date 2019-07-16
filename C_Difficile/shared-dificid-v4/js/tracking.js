setTimeout(function(){
    MainModule.setTracking([
        {
            element: $('#halfMoonTOC'),
            tagDescription: 'Table Of Content',
            surveyQuestion: 'Yes'
        },
        {
            element: $('#halfMoonSSI'),
            tagDescription: 'Indications and Important Safety Information',
            surveyQuestion: 'Yes'
        }     
    ]);
}, 1000); 

