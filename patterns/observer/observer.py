class UpdateWordPress
    states = [
            'not_started',
            'pre-update smoketest',
            'pre-update checkpoint',
            'update in progress',
            'post-update smoketest',
            'post-update checkpoint'
            ]

    def __init__(self) :
        self.state = 0

    def get_state(self) :
        return states[self.state]

    def update(self) :
        #do stuff and update state


class UserInterface :
    def __init__(self, update_object) :
        self.update_object = update_object

    def update_my_site(self) :
        self.update_object.update()

    def update(self, state) :
        self.state = state

    def hows_it_going(self) :
        return self.state
