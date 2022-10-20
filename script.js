function prodType(option){
    var DVD = document.getElementById("DVD-f");
    var Furniture = document.getElementById("Furniture-f");
    var Book = document.getElementById("Book-f");
    
    DVD.style.display="none";
    Furniture.style.display="none";
    Book.style.display="none";
    
    if(option=="DVD"){
      DVD.style.display="block";
    }else if(option=="Furniture"){
      Furniture.style.display="block";
    }else if(option=="Book"){
      Book.style.display="block";
    }
  }