import urllib
import pdb

class GetWordsDictionary(dict) :
    def __init__(self, words_list_url) :
        request = urllib.request.Request(words_list_url, headers={'User-Agent': "Magic Browser"})
        con = urllib.request.urlopen(req)
        con.read()

        request = urllib2.Request(words_list_url, headers={'User-Agent': "Magic Browser"})
        words_list = urllib2.urlopen(request).read()
        self = self.parse_list(words_list)

    def parse_list(self, words_list) :
        words_dict = {}
        for word in words_list :
            letter_list = word.split('')
            pdb.set_trace()
            break

        return words_dict
