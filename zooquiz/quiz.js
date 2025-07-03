let var1;
let opt1=document.querySelector("#opt1");
let opt2=document.querySelector("#opt2");
let opt3=document.querySelector("#opt3");
let opt4=document.querySelector("#opt4");
let heading=document.querySelector(".heading");
let player=0;

let choice;
const animal  = [ 
'url("QUIZIMAGES/Bear.jpeg")',
'url("QUIZIMAGES/Cheetah.jpeg")',
'url("QUIZIMAGES/Deer.jpeg")',
'url("QUIZIMAGES/Elephant.jpeg")',
'url("QUIZIMAGES/Lion.jpeg")',
'url("QUIZIMAGES/Parrot.jpeg")',
'url("QUIZIMAGES/Peakcock.jpeg")',
'url("QUIZIMAGES/Starfish.jpeg")',
'url("QUIZIMAGES/Tiger.jpeg")',
'url("QUIZIMAGES/Turtle.jpeg")',
'url("QUIZIMAGES/Zebra.jpeg")',
] ; 

const animalid =   [ 
  "Bear",
  "Cheetah",
  "Deer",
  "Elephant",
  "Lion",
  "Parrot",
  "Peacock",
  "Starfish",
  "Tiger",
  "Turtle",
  "Zebra",
  ] ; 

  // question generator

  const ques=document.querySelector('.ques');
  const random=()=>{
  const idx = Math.floor(Math.random()*11);
  const img = animal[idx];
  const ids = animalid[idx];
  ques.style.backgroundImage = img;
  ques.id = ids;
  console.log(idx);
  console.log(ids);
  }



  
// checker

let score=document.querySelector("#score");

const check=()=>{
  if(id==ques.id){
    console.log("CORRECT");
    heading.innerHTML="CORRECT!"
    player++
    score.innerHTML=player;
    ;
  }
  else{
    heading.innerHTML="TRY AGAIN!";
    random();
    options();
  }
}

  // optnid

  let option=document.querySelectorAll(".option");
  option.forEach((options)=>{
    options.addEventListener("click",()=>
    {
      id=options.getAttribute("id");
      console.log(`${id} is chosen`);
      check();
    })
  })


//  optn generator 
  const options=()=>{
  if(ques.id=="Bear"){
    opt1.id="Deer";opt1.innerHTML="DEER";
    opt2.id="Lion";opt2.innerHTML="LION";
    opt3.id="Bear";opt3.innerHTML="BEAR";
    opt4.id="Peacock";opt4.innerHTML="PEACOCK";
    options();
    }  
  if(ques.id=="Cheetah"){
    opt1.id="Elephant";opt1.innerHTML="ELEPHANT";
    opt2.id="Turtle";opt2.innerHTML="TURTLE";
    opt3.id="Zebra";opt3.innerHTML="DEER";
    opt4.id="Cheetah";opt4.innerHTML="CHEETAH";
    options();
    }  
  if(ques.id=="Deer"){
    opt1.id="Deer";opt1.innerHTML="DEER";
    opt2.id="Parrot";opt2.innerHTML="PARROT";
    opt3.id="Peacock";opt3.innerHTML="PEACOCK";
    opt4.id="Tiger";opt4.innerHTML="TIGER";
    options();
    }  
  if(ques.id=="Elephant"){
    opt1.id="Bear";opt1.innerHTML="BEAR";
    opt2.id="Elephant";opt2.innerHTML="ELEPHANT";
    opt3.id="Cheetah";opt3.innerHTML="CHEETAH";
    opt4.id="Starfish";opt4.innerHTML="STARFISH";
    options();
    }  
  if(ques.id=="Lion"){
    opt1.id="Zebra";opt1.innerHTML="ZEBRA";
    opt2.id="Elephant";opt2.innerHTML="ELEPHANT";
    opt3.id="Parrot";opt3.innerHTML="PARROT";
    opt4.id="Lion";opt4.innerHTML="LION";
    options();
    }  
  if(ques.id=="Parrot"){
    opt1.id="Bear";opt1.innerHTML="BEAR";
    opt2.id="Parrot";opt2.innerHTML="PARROT";
    opt3.id="Peacock";opt3.innerHTML="Peacock";
    opt4.id="Turtle";opt4.innerHTML="TURTLE";
    options();
    }  
  if(ques.id=="Peacock"){
    opt1.id="Lion";opt1.innerHTML="BEAR";
    opt2.id="Parror";opt2.innerHTML="PARROT";
    opt3.id="Lion";opt3.innerHTML="LION";
    opt4.id="Peacock";opt4.innerHTML="PEACOCK";
    options();
    }  
  if(ques.id=="Starfish"){
    opt1.id="Turtle";opt1.innerHTML="TURTLE";
    opt2.id="Peacock";opt2.innerHTML="PEACOCK";
    opt3.id="Deer";opt3.innerHTML="DEER";
    opt4.id="Starfish";opt4.innerHTML="STARFISH";
    options();
    }  
  if(ques.id=="Tiger"){
    opt1.id="Starfish";opt1.innerHTML="STARFISH";
    opt2.id="Turtle";opt2.innerHTML="TURTLE";
    opt3.id="Deer";opt3.innerHTML="DEER";
    opt4.id="Tiger";opt4.innerHTML="TIGER";
    options();
    }  
  if(ques.id=="Turtle"){
    opt1.id="Turtle";opt1.innerHTML="TURTLE";
    opt2.id="Tiger";opt2.innerHTML="TIGER";
    opt3.id="Deer";opt3.innerHTML="DEER";
    opt4.id="Starfish";opt4.innerHTML="STARFISH";
    options();
    }  
  if(ques.id=="Zebra"){
    opt1.id="Turtle";opt1.innerHTML="TURTLE";
    opt2.id="Tiger";opt2.innerHTML="TIGER";
    opt3.id="Bear";opt3.innerHTML="BEAR";
    opt4.id="Zebra";opt4.innerHTML="ZEBRA";
    options();
    }  
  }


  let next=document.querySelector("#next");
  next.addEventListener("click",()=>
  { next.innerHTML="NEXT";
    random();
    options();
    
  });

 




