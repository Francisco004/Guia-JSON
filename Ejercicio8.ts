namespace Main 
{  
    export function Ejercicio8():void
    {        
        const xhr = new XMLHttpRequest();

        xhr.onload = function()
        {
            if(this.status === 200)
            {
                try{
                    const obj = JSON.parse(this.responseText);

                    (<HTMLInputElement> document.getElementById("ID")).value = obj.Id;
                    (<HTMLInputElement> document.getElementById("Marca")).value = obj.Marca;
                    (<HTMLInputElement> document.getElementById("Precio")).value = obj.Precio;
                    (<HTMLInputElement> document.getElementById("Color")).value = obj.Color;
                    (<HTMLInputElement> document.getElementById("Modelo")).value = obj.Modelo;
                }
                catch (e)
                {
                    console.warn("Hay un error en el json");
                }
            }else
            {
                console.warn('No se recibio 200 OK')
            }
        }

        xhr.open("get", "./Ejercicio8.php");
        xhr.send();
    }
}