import {querySelectorArray} from "../utils/dom.utils";

export function initImageGalleries() {
    const galleries = querySelectorArray('.img-g');
    galleries.forEach(initImageGallery);
}

function initImageGallery(el: HTMLDivElement) {
    const thumbs = querySelectorArray(el, '.img-g-thumb');
    const main = el.querySelector('.img-g-main');

    const setActiveImage: EventListener = (event: Event) => {
        const target = (event.target as HTMLButtonElement);
        const imageSrc = target.querySelector('img').src;
        thumbs.forEach(el => el.classList.remove('img-g-active'));
        main.querySelector('img').src = imageSrc;
        target.classList.add('img-g-active');
    }

    thumbs.forEach(thumb => {
        thumb.addEventListener('click', setActiveImage);
    });
}


