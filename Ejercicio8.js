var Main;
(function (Main) {
    function Ejercicio8() {
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            if (this.status === 200) {
                try {
                    var obj = JSON.parse(this.responseText);
                    document.getElementById("ID").value = obj.Id;
                    document.getElementById("Marca").value = obj.Marca;
                    document.getElementById("Precio").value = obj.Precio;
                    document.getElementById("Color").value = obj.Color;
                    document.getElementById("Modelo").value = obj.Modelo;
                }
                catch (e) {
                    console.warn("Hay un error en el json");
                }
            }
            else {
                console.warn('No se recibio 200 OK');
            }
        };
        xhr.open("get", "./Ejercicio8.php");
        xhr.send();
    }
    Main.Ejercicio8 = Ejercicio8;
})(Main || (Main = {}));
