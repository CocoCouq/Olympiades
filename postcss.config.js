const purgecss = require('@fullhuman/postcss-purgecss')
const cssnano = require('cssnano')

module.exports = {
    plugins: [
        cssnano({
            preset: 'default'
        }),
        purgecss({
            content: ['./public/**/*.php', './src/**/*.js'],
            defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
        })
    ]
}
