<div class="modal" id="modal">
    <div class="modalWrapper">
        <div class="modalForm">
            <div class="modalName">
                <p class="modalName--Title">Имя</p>
                <input class="modalName--Input" id="name" type="text" placeholder="Имя" require/>
            </div>
            <div class="modalTel">
                <p class="modalTel--Title">Номер телефона</p>
                <input class="modalTel--Input" id="telephone" type="tel" placeholder="Номер телефона" require/>
            </div>
            <button class="modalButton buttonContent"  onclick="sendEmail()">Отправить</button>
        </div>

        <div class="modalClose" id="modalClose"></div>
    </div>
</div>