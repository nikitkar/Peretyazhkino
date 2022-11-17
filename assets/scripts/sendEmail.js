function sendEmail() {
    emailjs.init("Rt5easX-t6V_Dl7fv");

    if (
        document.getElementById("name").value == "" ||
        document.getElementById("telephone").value == ""
    ) {
        return alert("Заполните форму");
    }

    let params = {
        name: document.getElementById("name").value,
        telephone: document.getElementById("telephone").value,
    };

    const serviceID = "service_7l30rtw";
    const templateID = "template_vzqtpnm";

    emailjs.send(serviceID, templateID, params).then(
        (response) => {
            document.getElementById("name").value = "";
            document.getElementById("telephone").value = "";
            alert("Заявка отправлена");
        },
        (error) => {
            console.log("FAILED...", error);
        }
    );
}
