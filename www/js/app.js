// Adapted from http://extras.denverpost.com/app/bill-tracker/bills/ , adapted from http://www.soliantconsulting.com/blog/2013/02/title-generator-using-markov-chains
var markov = {
    titles: [],
    terminals: {},
    startwords: [],
    wordstats: {},
    choice: function (a) {
        var i = Math.floor(a.length * Math.random());
        return a[i];
    },
    make_title: function (min, max) {
        var word = this.choice(this.startwords);
        var title = [word];
        while (this.wordstats.hasOwnProperty(word)) {
            var next_words = this.wordstats[word];
            word = this.choice(next_words);
            title.push(word);
            if (title.length > min && this.terminals.hasOwnProperty(word)) break;
        }

        // Sometimes the last word is "of." That definitely makes no sense.
        console.log(title);
        if ( title[title.length - 1] === 'Of' ) title.splice(-1, 1);
        if ( title[title.length - 1] === 'The' ) {
            if ( title[title.length - 2] === 'In' || title[title.length - 2] === 'For' ) {
                title.splice(-1, 1);
                title.splice(-1, 1);
            }
        }

        if (title.length < min) return this.make_title(min, max);
        if (title.length > max) return this.make_title(min, max);
        if (this.titles.indexOf(title.join(' ')) !== -1) return this.make_title(min, max);

        return title.join(' ');
    },
    length: 1,
    load_title: function() {
        var floor = 4;
        var min = floor + Math.floor(2 * Math.random());
        var max = min + Math.floor(9 * Math.random());
        var title = this.make_title(min, max);
        document.getElementById('quoted').innerHTML = title + '<span>*</span>';
        return title;
    },
    init: function() {
		this.titles = jdn.data;
        var len = this.titles.length;
        for (var i = 0; i < len; i++)
        {
            var words = this.titles[i].split(' ');
            this.terminals[words[words.length-1]] = true;
            this.startwords.push(words[0]);
            var wordlen = words.length;
            for (var j = 0; j < wordlen - 1; j++)
            {
                if (this.wordstats.hasOwnProperty(words[j])) {
                    this.wordstats[words[j]].push(words[j+1]);
                } else {
                    this.wordstats[words[j]] = [words[j+1]];
                }
            }
        }
    },
}
markov.init();
