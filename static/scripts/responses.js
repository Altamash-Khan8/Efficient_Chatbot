function getBotResponse(input) {
    //crime
    if (input == "report a crime") {
        return "What type of crime do you want to report here are the list, Kidnapping | Thief | Rape | Murder";
    } else if (input == "Murder") {
        return "Here are the information regarding murder immediately file a report and if u have evidence like phtos and videos upload in report section";
    } else if (input == "rape") {
        return "Its a heneous crime";
    }
    else if (input == "thief") {
        return "Its a heneous crime";
    }
    else if (input == "kidnapping") {
        return "Its a heneous crime";
    }
    else if (input == "yes") {
        return "Ok please select which crime you affected from";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}