(defrule MAIN::skin1
   (is-bird ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::skin2
   (is-fish ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::skin3
   (is-mammal ?x)
   =>
   (assert(is-animal ?x))
   (assert(has-skin ?x)))

(defrule MAIN::fish
   (is-fish ?x)
   (and (not (is-fish shark)))
   =>
   (assert (has-gills ?x))
   (assert (can-swim ?x))
   (assert (lay-eggs ?x)))

(defrule MAIN::bird
   (is-bird ?x)
   (and (not(is-bird ostrich)))
   =>
   (assert (has-wings ?x))
   (assert (can-fly ?x))
   (assert (lay-eggs ?x)))

(defrule MAIN::mammal
   (is-mammal ?x)
   =>
   (assert (do-not-lay-eggs ?x)))

(defrule MAIN::shark
   (is-fish shark)
   =>
   (assert (has-gills shark))
   (assert (can-swim shark))
   (assert (do-not-lay-eggs shark))
   (assert (is-dangerous shark)))

(defrule MAIN::ostrich
   (is-bird ostrich)
   =>
   (assert (has-wings ostrich))
   (assert (is-tall ostrich))
   (assert (cannot-fly ostrich))
   (assert (can-walk ostrich)))

(defrule MAIN::salmon
   (is-fish salmon)
   =>
   (assert (has-gills salmon))
   (assert (can-swim salmon))
   (assert (is-delicious salmon)))

(defrule MAIN::canary
   (is-bird canary)
   =>
   (assert(has-wings canary))
   (assert(can-fly canary))
   (assert (color-canary yellow)))

(defrule MAIN::delicious
(is-delicious ?x)
=>
(assert(we-can-eat ?x))
(printout t "We can eat "?x crlf)
)

(defrule MAIN::dangerous
   (is-dangerous ?x)
   =>
   (printout t ?x" is dangerous" crlf))

(defrule MAIN::cannotfly
   (cannot-fly ?x)
   =>
   (printout t ?x" cannot fly" crlf))

(defrule MAIN::canfly
   (can-fly ?x)
   =>
   (printout t ?x" can fly" crlf))

(defrule MAIN::hasskin
   (has-skin ?x)
   =>
   (printout t ?x" has skin" crlf))

(defrule MAIN::color
   (color-canary ?x)
   =>
   (printout t "Color of canaries is "?x crlf))