/*
* Set number of total images in the mopix
* Set the shared path accordingly
* Uncomment the code according to the image namingConvention provided.
* Uncomment when the image naming convention is : 01,02,03 i.e starts from zero
* Uncomment when the image naming convention is : 11,12,13 i.e starts from one
* Uncomment when the image naming convention is : 1,2,3 i.e incrementation of numbers
*/
var n = 26; // total number of images for mopix
var src  = "../shared/shared-dificid-v4/mopix/"
       // FileList object
var url= [];

    // Loop through the FileList and render image files as thumbnails.
  for (var i = 1; i<=n; i++) {
    
     // 1) if number is 01,02,03 please uncomment this section and use below code and comment other
        // link = src + "0" + i + ".png";
//================================================================================================
    // 2) if number is 1,2,3 please uncomment this section and use below code and comment other    
      
         link = src + i + ".png"; 
      
//==============================================================================================
      // 3) if number is 110 111 112 please use below code and comment other  
          //link = src + "1" + i + ".png";
    url.push(link);
  }



// Original Code

mopix.load({
    url: url
}).enableTouchGestures().bigSlider();
//pass the css class/id names specified in the main.css(Include css names that have been added by you)
cssCreator.pseudoGet({
	cssMainLister: [
		'bold','study','normal','light','italic','boldItalic', 'lightItalic', 'medium', 'condensedBold', 'oblique','darkBlue','lightBlue','yellow','gray','midGray','darkGray', 'green','blue','black','white','fs8','fs10', 'fs12','fs13','fs14','fs15','fs16','fs17','fs18','fs19','fs20','fs21','fs23','fs24','fs26','fs28','fs30','fs33','fs36','fs42','fs46','fs50', 'lh13','lh14','lh16','lh18','lh20','lh21','lh22','lh23','lh24','lh25','lh26','lh28','lh30','lh50', 'plusBtn', 'studyBtn'

	]
})
