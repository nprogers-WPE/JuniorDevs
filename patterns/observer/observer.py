#!/usr/bin/env python

from time import sleep

class UpdateWordPress :
    states = [
            'not_started',
            'pre-update smoketest',
            'pre-update checkpoint',
            'update in progress',
            'post-update smoketest',
            'post-update checkpoint'
            ]

    def __init__(self) :
        self.observers = []

    def attach_observer(self, observer) :
        self.observers.append(observer)

    def detach_observer(self, observer) :
        self.observers.remove(observer)

    def notify(self) :
        for observer in self.observers :
            observer.update(self.states[self.s;sptate])

    def run(self) :
        for i in range(len(self.states)) :
            self.state = i
            self.notify()
            sleep(3) # doin' stuff


class UserInterface :
    def __init__(self, name) :
        self.name = name
        self.state = None

    def update(self, state) :
        self.state = state
        print "Name: {}, State: {}".format(self.name, self.state)

    def hows_it_going(self) :
        return self.state

observer1 = UserInterface('instance1')
observer2 = UserInterface('instance2')

observable = UpdateWordPress()
observable.attach_observer(observer1)
observable.attach_observer(observer2)

observable.run()
