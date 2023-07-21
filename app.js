


const Application = PIXI.Application;
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
const app = new Application(
    {

        width: 390,
        height: 844,
        transparent: false,
        antialais: true,
        view: document.getElementById('pixiCanvas'),
    }
);

app.renderer.backgroundColor = 0xff72fa;
document.body.appendChild(app.view);


const Graphics = PIXI.Graphics;
/*
const rectangle = new Graphics();
rectangle.beginFill("#FFFFFF")
    .drawRect(200, 200, 100, 120)
    .endFill();
rectangle.x = 200;
rectangle.y = 200;
app.stage.addChild(rectangle);


const circle = new Graphics();
circle.beginFill(0xff00fa).drawCircle(440, 100, 80)
app.stage.addChild(circle);
*/
const style = new PIXI.TextStyle({
    fontFamily: "Montserrat",
    fontSize: 200,
    fill: 0xff00fa
})
let number = 0;
let myText = new PIXI.Text(number, style)

app.stage.addChild(myText);

myText.style.wordWrap = true;
myText.style.wordWrapWidth = 100;
app.ticker.add(delta => loop(delta))


var rect = new Graphics();

function loop(delta) {

    number += 1;
    // gubbeSprite.x += 0.2;
    //gubbeSprite.rotation += 0.1;
    if (number == 150) {

        rect.beginFill("#FFFFFF")
            .drawRect(Math.random() * app.screen.width, Math.random() * app.screen.height, 10, 10)
            .endFill();
        rect.interactive = true;
        rect.on("pointerdown", () => {
            console.log("yoo");
            rect.clear();
        }
        );

        app.stage.addChild(rect);
        number = 0





    }




}



const gubbeSprite = PIXI.Sprite.from("./images/profile-icon.gif");
gubbeSprite.x = 200;
gubbeSprite.y = 200;
gubbeSprite.scale.x += -1;
gubbeSprite.scale.y += -1;
//middle of image (rotation from middle)
gubbeSprite.anchor.x = 0.5;
gubbeSprite.anchor.y = 0.5;
app.stage.addChild(gubbeSprite);
gubbeSprite.interactive = true;
gubbeSprite.buttonMode = true;
gubbeSprite.on('pointerdown', function () {
    gubbeSprite.scale.x += 0.1;
    gubbeSprite.scale.y += 0.1;
});



gubbeSprite.on("pointerdown", () => {
    console.log("yoo");
}
);
const ondragStart = event => {
    gubbeSprite.data = event.data;
    gubbeSprite.dragging = true;
};
const ondragEnd = event => {
    delete gubbeSprite.data;
    gubbeSprite.dragging = false;
};
const ondragMove = event => {
    if (gubbeSprite.dragging === true) {
        const newPosition = gubbeSprite.data.getLocalPosition(gubbeSprite.parent);
        gubbeSprite.x = newPosition.x;
        gubbeSprite.y = newPosition.y;
    }
};
// Register the pointer events
gubbeSprite.on('pointerdown', ondragStart)
    .on('pointerup', ondragEnd)
    .on('pointerupoutside', ondragEnd)
    .on('pointermove', ondragMove);




document.addEventListener('keydown', async function (e) {
    if (e.key === 'ArrowRight')

        for (let index = 0; index < 10; index++) {
            gubbeSprite.x += (index % 5) * 0.5;


        }

    if (e.key === 'ArrowLeft')
        for (let index = 0; index < 10; index++) {
            gubbeSprite.x -= 7;
            await sleep(index * 5);
        }


    if (e.key === 'ArrowDown')
        for (let index = 0; index < 10; index++) {
            gubbeSprite.y += index;
            await sleep(index * 5);
        }

    if (e.key === 'ArrowUp')
        for (let index = 0; index < 10; index++) {
            gubbeSprite.y -= 5;
            await sleep(index * 5);
        }

});


