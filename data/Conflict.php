<?php

// namespace agar nama class tidak conflict
// Data\One (nama namespace) = sub namespace
namespace Data\One {
    class Conflict {}

    class Sample {}

    class Dummy {}
}

namespace Data\Two {
    class Conflict {}
}
