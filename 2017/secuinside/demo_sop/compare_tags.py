# -*- coding: utf-8
from bs4 import BeautifulSoup


def origin_tags():
    # http://secuinside.org/2017/ctf.html
    f = open('ctf.html')
    html = f.read()
    soup = BeautifulSoup(html, "html.parser")
    tags = set()
    for tag in soup.find_all():
        tags.add(tag.name)
    return tags


def read_tags():
    # Using Edge
    # read:http://secuinside.org/2017/ctf.html
    f = open('read_ctf.html')
    html = f.read()
    soup = BeautifulSoup(html, "html.parser")
    tags = set()
    for tag in soup.find_all():
        tags.add(tag.name)
    return tags


if __name__ == '__main__':
    temp = list(origin_tags() - read_tags())
    for data in temp:
        print data
