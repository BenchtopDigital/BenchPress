/* eslint-disable @typescript-eslint/no-non-null-assertion */
// eslint-disable-next-line @typescript-eslint/no-var-requires
const plugin = require('tailwindcss/plugin');

const theme = (path, theme) => {
    return path.split('.').reduce(function(previous, current) {
        return previous ? previous[current] : null
    }, theme || self);
}

const colorMapper = (colors) => {
    const result = {};

    colors.forEach(function(color) {
        result[''+color.slug+''] = color.color;
    });

    return result;
}

const fontSizeMapper = (fontSizes) => {
    const result = {};

    fontSizes.forEach(function(fontSize) {
        result[''+fontSize.slug+''] = fontSize.size;
    });

    return result;
}

const tailwind = plugin(function ({addUtilities, theme}) {
    const colors = theme('colors');
    const screens = theme('screens');
    const fontSize = theme('fontSize');


    const widthUtilities = {
        '.w-wide': {
            maxWidth: `${screens['xl']}`,
        },
        '.w-content': {
            width: `${screens['lg']}`,
        }
    };

    const maxWidthUtilities = {
        '.max-w-wide': {
            maxWidth: `${screens['xl']}`,
        },
        '.max-w-content': {
            maxWidth: `${screens['lg']}`,
        }
    };

    const alignmentUtilities = {
        '.alignfull': {
            maxWidth: '100% !important',
            "@apply w-screen": {}
        },
        '.alignwide': {
            "@apply !max-w-wide": {}
        },
        '.alignnone': {
            "@apply h-auto max-w-full mx-0": {}
        },
        ".aligncenter": {
            "@apply block": {}
        },
        [`@media (min-width: ${screens.sm || '640px'})`]: {
            '.alignleft:not(.wp-block-button)': {
                "@apply float-left": {}
            },
            '.alignright:not(.wp-block-button)': {
                "@apply float-right": {}
            },
            ".wp-block-button.alignleft a": {
                "@apply float-left mr-4": {},
            },
            ".wp-block-button.alignright a": {
                "@apply float-right ml-4": {},
            },
        },
    };

    const imageCaptions = {
        '.wp-caption': {
            "@apply inline-block": {},
            '& img': {
                "@apply leading-none": {}
            },
        },
        '.wp-caption-text': {
            fontSize: (fontSize.sm && fontSize.sm[0]) || '0.9rem',
            color: (colors.gray && colors.gray[600]) || '#718096',
        },
    };

    addUtilities([widthUtilities, maxWidthUtilities, alignmentUtilities , imageCaptions], {
        respectPrefix: false,
        respectImportant: false,
    });
});

module.exports = {theme, colorMapper, fontSizeMapper, tailwind};
