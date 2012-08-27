Dreams = new Meteor.Collection "dreams"

if Meteor.is_client

  Template.dreams.dreams = ->
    return Dreams.find({}, {sort: {time: -1}})

  Template.form.events =
    'submit': (e) ->

      # hold event back
      e.preventDefault()

      $dream = $('#dream')

      if $dream.val() == ''
        valid = false
      else
        Dreams.insert({
          dream: $dream.val(),
          name: $('#name').val(),
          time: new Date()
        })

        $dream.val('')

      return false
