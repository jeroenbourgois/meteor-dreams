Wishes = new Meteor.Collection "wishes"

if Meteor.is_client

  Template.wishlist.wishes = ->
    return Wishes.find({}, {sort: {time: -1}})

  Template.form.events =
    'submit': (e) ->

      # hold event back
      e.preventDefault()

      $wish = $('#wens')
      $name = $('#naam')

      if $wish.val() == '' or $name.val() == ''
        valid = false
      else
        Wishes.insert({
          wish: $wish.val(),
          name: $name.val(),
          time: new Date()
        })

        $wish.val('')
        $name.val('')

      return false

  Meteor.startup ->
    console.log 'ready'


if Meteor.is_server
  Meteor.startup ->
    Meteor.default_server.method_handlers['/wishes/remove'] = (->)

    Meteor.methods
      reset: ->
        Wishes.remove({})
        console.log '*** DB is reset ***'
