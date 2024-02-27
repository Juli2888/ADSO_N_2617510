const $Calculator = {
	
  ObjName : String("Calculator"),
  Object  : Object(),
  Screen  : {
      ObjName : String("Screen"),
      Object  : Object(),
      Text    : String(0),
      Calculate: Number(0),
      Calculate2: Number(0),
      Operate  : String(""),
      Punto    : Boolean(false),
      UsedPunto: Boolean(false),
      Set (data) {
          if (data == "Clear"){
            if($Calculator.Screen.Text == ""){
                $Calculator.Screen.Calculate = ""
                  $Calculator.Screen.Calculate2 = ""
                  $Calculator.Screen.Operate = ""
              }
              $Calculator.Screen.Text = ""
              $Calculator.Screen.Object.value = ""
              $Calculator.Screen.ResetPunto()
              
          }else if (data == "Sumar"){
              $Calculator.Screen.Calculate = $Calculator.Screen.Text
              $Calculator.Screen.Operate = "+"
              $Calculator.Screen.Text = ""
              $Calculator.Screen.Object.value = ""
              $Calculator.Screen.ResetPunto()
          }else if (data == "Restar"){
              $Calculator.Screen.Calculate = $Calculator.Screen.Text
              $Calculator.Screen.Operate = "-"
              $Calculator.Screen.Text = ""
              $Calculator.Screen.Object.value = ""
              $Calculator.Screen.ResetPunto()
          }else if (data == "Multiplicar"){
              $Calculator.Screen.Calculate = $Calculator.Screen.Text
              $Calculator.Screen.Operate = "*"
              $Calculator.Screen.Text = ""
              $Calculator.Screen.Object.value = ""
              $Calculator.Screen.ResetPunto()
          }else if (data == "Dividir"){
              $Calculator.Screen.Calculate = $Calculator.Screen.Text
              $Calculator.Screen.Operate = "/"
              $Calculator.Screen.Text = ""
              $Calculator.Screen.Object.value = ""
              $Calculator.Screen.ResetPunto()
          }else if (data == "Enter"){
              $Calculator.Screen.Calculate2 = $Calculator.Screen.Text
              if($Calculator.Screen.Operate == ""){
                  alert("Por favor primero haz click en alguna operación 'ejemplo (+)'")
              }
              if ($Calculator.Screen.Operate == "+"){
                  $Calculator.Screen.Text = parseFloat($Calculator.Screen.Calculate) + parseFloat($Calculator.Screen.Calculate2)
              }
              if ($Calculator.Screen.Operate == "-"){
                  $Calculator.Screen.Text = parseFloat($Calculator.Screen.Calculate) - parseFloat($Calculator.Screen.Calculate2)
              }
              if ($Calculator.Screen.Operate == "*"){
                  $Calculator.Screen.Text = parseFloat($Calculator.Screen.Calculate) * parseFloat($Calculator.Screen.Calculate2)
              }
              if ($Calculator.Screen.Operate == "/"){
                  $Calculator.Screen.Text = parseFloat($Calculator.Screen.Calculate) / parseFloat($Calculator.Screen.Calculate2)
              }
              //$Calculator.Screen.Text = ""
              $Calculator.Screen.ResetPunto()
              
              $Calculator.Screen.Object.value = $Calculator.Screen.Text
          }else if(data == "."){
              if($Calculator.Screen.Punto != true){
                  console.log("into punto")
                  console.log($Calculator.Screen.Punto)
                  $Calculator.Screen.Text = $Calculator.Screen.Object.value + data.substring(0, data.length - 1)
                  $Calculator.Screen.Object.value = ""//$Calculator.Screen.Text.substring(0, $Calculator.Screen.Text.length - 1); 
                  console.log($Calculator.Screen.Text)
                  $Calculator.Screen.Punto = true
                  console.log($Calculator.Screen.Punto)

              }   
              
              
          }else{
              if($Calculator.Screen.Punto == true && $Calculator.Screen.UsedPunto == false){
                  $Calculator.Screen.Text = $Calculator.Screen.Text + "." + data
                  $Calculator.Screen.Object.value = $Calculator.Screen.Text
                  $Calculator.Screen.UsedPunto = true
              }else{
                  $Calculator.Screen.Text = $Calculator.Screen.Object.value + data
                  $Calculator.Screen.Object.value = $Calculator.Screen.Text
              }
              
              
              
          }
          
      },
      ResetPunto () {
          $Calculator.Screen.UsedPunto = false
          $Calculator.Screen.Punto = false
      }
  },
  Btn_0  : {
      ObjName : String("Btn_0"),
      Object  : Object()
  },
  Btn_1  : {
      ObjName : String("Btn_1"),
      Object  : Object()
  },
  Btn_2  : {
      ObjName : String("Btn_2"),
      Object  : Object()
  },
  Btn_3  : {
      ObjName : String("Btn_3"),
      Object  : Object()
  },
  Btn_4  : {
      ObjName : String("Btn_4"),
      Object  : Object()
  },
  Btn_5  : {
      ObjName : String("Btn_5"),
      Object  : Object()
  },
  Btn_6  : {
      ObjName : String("Btn_6"),
      Object  : Object()
  },
  Btn_7  : {
      ObjName : String("Btn_7"),
      Object  : Object()
  },
  Btn_8  : {
      ObjName : String("Btn_8"),
      Object  : Object()
  },
  Btn_9  : {
      ObjName : String("Btn_9"),
      Object  : Object()
  },
  Btn_Clear  : {
      ObjName : String("Btn_Clear"),
      Object  : Object()
  },
  Btn_Dividir  : {
      ObjName : String("Btn_Dividir"),
      Object  : Object()
  },
  Btn_Multiplicar  : {
      ObjName : String("Btn_Multiplicar"),
      Object  : Object()
  },
  Btn_Restar  : {
      ObjName : String("Btn_Restar"),
      Object  : Object()
  },
  Btn_Sumar  : {
      ObjName : String("Btn_Sumar"),
      Object  : Object()
  },
  Btn_Enter  : {
      ObjName : String("Btn_Enter"),
      Object  : Object()
  },
  Btn_Punto  : {
      ObjName : String("Btn_Punto"),
      Object  : Object()
  },
  Start () {
      $Calculator.Object = document.getElementById($Calculator.ObjName)
      $Calculator.Screen.Object = document.getElementById($Calculator.Screen.ObjName)
      $Calculator.Screen.Object.value = $Calculator.Screen.Text
      $Calculator.Btn_0.Object  = document.getElementById($Calculator.Btn_0.ObjName)
      $Calculator.Btn_1.Object  = document.getElementById($Calculator.Btn_1.ObjName)
      $Calculator.Btn_2.Object  = document.getElementById($Calculator.Btn_2.ObjName)
      $Calculator.Btn_3.Object  = document.getElementById($Calculator.Btn_3.ObjName)
      $Calculator.Btn_4.Object  = document.getElementById($Calculator.Btn_4.ObjName)
      $Calculator.Btn_5.Object  = document.getElementById($Calculator.Btn_5.ObjName)
      $Calculator.Btn_6.Object  = document.getElementById($Calculator.Btn_6.ObjName)
      $Calculator.Btn_7.Object  = document.getElementById($Calculator.Btn_7.ObjName)
      $Calculator.Btn_8.Object  = document.getElementById($Calculator.Btn_8.ObjName)
      $Calculator.Btn_9.Object  = document.getElementById($Calculator.Btn_9.ObjName)
      $Calculator.Btn_Clear.Object  = document.getElementById($Calculator.Btn_Clear.ObjName)
      $Calculator.Btn_Sumar.Object  = document.getElementById($Calculator.Btn_Sumar.ObjName)
      $Calculator.Btn_Restar.Object  = document.getElementById($Calculator.Btn_Restar.ObjName)
      $Calculator.Btn_Dividir.Object  = document.getElementById($Calculator.Btn_Dividir.ObjName)
      $Calculator.Btn_Multiplicar.Object  = document.getElementById($Calculator.Btn_Multiplicar.ObjName)
      $Calculator.Btn_Enter.Object  = document.getElementById($Calculator.Btn_Enter.ObjName)
      $Calculator.Btn_Punto.Object  = document.getElementById($Calculator.Btn_Punto.ObjName)

      $Calculator.Btn_0.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("0")
      })
      $Calculator.Btn_1.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("1")
      })
      $Calculator.Btn_2.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("2")
      })
      $Calculator.Btn_3.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("3")
      })
      $Calculator.Btn_4.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("4")
      })
      $Calculator.Btn_5.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("5")
      })
      $Calculator.Btn_6.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("6")
      })
      $Calculator.Btn_7.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("7")
      })
      $Calculator.Btn_8.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("8")
      })
      $Calculator.Btn_9.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("9")
      })
      $Calculator.Btn_Clear.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Clear")
      })
      $Calculator.Btn_Sumar.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Sumar")
      })
      $Calculator.Btn_Restar.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Restar")
      })
      $Calculator.Btn_Multiplicar.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Multiplicar")
      })
      $Calculator.Btn_Dividir.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Dividir")
      })
      $Calculator.Btn_Enter.Object.addEventListener("click", function () {
          $Calculator.Screen.Set("Enter")
      })
      $Calculator.Btn_Punto.Object.addEventListener("click", function () {
          $Calculator.Screen.Set(".")
      })
      
      
  }


}

$Calculator.Start()
                      
